<?php

namespace Vostre\BlogBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * PostRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PostRepository extends EntityRepository
{
    
    public function listarTodos($limite = null, $situacao){
        
        if($situacao == 0){
            $qb = $this->createQueryBuilder('p')
                ->select('p, t')
                ->leftJoin('p.tags', 't')
                ->andWhere('p.ativo = 0')
                //->distinct()
                ->addOrderBy('p.dataCriacao', 'DESC');
        } else{
            $qb = $this->createQueryBuilder('p')
                ->select('p, t')
                ->leftJoin('p.tags', 't')
                //->distinct()
                //->andWhere('p.ativo = 0')
                ->addOrderBy('p.dataCriacao', 'DESC');
        }
        
        if(false == is_null($limite)){
            $qb->setMaxResults($limite);
        }
        
        return $qb->getQuery()->getResult();
        
    }
    
    public function listarTodosPorMes($limite = null){
        $qb = $this->createQueryBuilder('p')
                ->select('p.id', 'p.titulo', 'SUBSTRING(p.dataCriacao, 6, 2) as mes', 
                        'SUBSTRING(p.dataCriacao, 1, 4) as ano', 'p.slug', 'p.dataCriacao')
                ->distinct()
                ->andWhere('p.ativo = 0')
                ->addOrderBy('p.dataCriacao', 'DESC');
        
        if(false == is_null($limite)){
            $qb->setMaxResults($limite);
        }
        
        return $qb->getQuery()->getResult();
        
    }
    
    public function listarPost($slug){
        $qb = $this->createQueryBuilder('p')
                ->select('p.id', 'p.titulo', 'p.subtitulo', 'p.texto', 'p.imagem', 'p.autor',
                        'p.dataCriacao', 'p.ultimaAlteracao', 'p.slug')
                ->distinct()
                ->andWhere('p.slug = :slug')
                ->andWhere('p.ativo = 0')
                ->addOrderBy('p.dataCriacao')->setParameter('slug', $slug);
        
        return $qb->getQuery()->getResult();
        
    }
    
    public function listarTodosPorTag($tag, $limite = null){
        
        $qb = $this->createQueryBuilder('p')
                ->select('p, t')
                ->leftJoin('p.tags', 't')
                //->distinct()
                ->where('t.tag = :tag')
                ->andWhere('p.ativo = 0')
                ->setParameter('tag', $tag)
                ->addOrderBy('p.dataCriacao', 'DESC');
        
        if(false == is_null($limite)){
            $qb->setMaxResults($limite);
        }
        
        return $qb->getQuery()->getResult();
        
    }
    
    public function listarPostsRelacionados($tag, $post, $limite = null){
        
        $qb = $this->createQueryBuilder('p');
        
                $qb->select('p, t')
                ->leftJoin('p.tags', 't')
                //->distinct()
                ->where('t.tag IN (:tag)')
                        ->andWhere('p.id <> :id')
                        ->andWhere('p.ativo = 0')
                ->setParameter('tag', $tag, \Doctrine\DBAL\Connection::PARAM_STR_ARRAY)
                        ->setParameter('id', $post->getId())
                ->addOrderBy('p.dataCriacao', 'DESC');
        
        if(false == is_null($limite)){
            $qb->setMaxResults($limite);
        }
        
        return $qb->getQuery()->getResult();
        
    }
    
        public function inativarPost($post){
            $qb = $this->createQueryBuilder('p')
                    ->update('VostreBlogBundle:Post', 'p')
                    ->set('p.ativo', '1')
                    ->andWhere('p.id = :post')
                    ->setParameter('post', $post->getId());

            return $qb->getQuery()->getResult();

        }
        
        public function reativarPost($post){
            $qb = $this->createQueryBuilder('p')
                    ->update('VostreBlogBundle:Post', 'p')
                    ->set('p.ativo', '0')
                    ->andWhere('p.id = :post')
                    ->setParameter('post', $post->getId());

            return $qb->getQuery()->getResult();

        }
    
}