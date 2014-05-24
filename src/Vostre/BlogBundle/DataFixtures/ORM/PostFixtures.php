<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Vostre\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Vostre\BlogBundle\Entity\Post;

/**
 * Description of PostFixtures
 *
 * @author Almir
 */
class PostFixtures extends AbstractFixture implements OrderedFixtureInterface {
    
    public function load(ObjectManager $manager){
        
        $post = new Post();
        $post->setTitulo("Postagem de Teste");
        $post->setSubtitulo("Este é um subtítulo de teste");
        $post->setTexto("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae volutpat nulla. Etiam in velit elit. Aliquam mollis tellus augue, in fermentum nibh consequat nec. In euismod dui eu volutpat placerat. Cras accumsan nulla nunc, non pretium arcu pretium in. Curabitur ornare in erat sed egestas. In ac pharetra tortor.
Donec adipiscing, ipsum tempor viverra placerat, ante arcu malesuada lorem, quis bibendum urna mauris eu urna. Sed vitae lacus sed ligula egestas dictum id sed justo. Ut quis placerat ligula. Proin sit amet vestibulum eros. Aliquam erat volutpat. Integer eget dictum purus. Vivamus iaculis, nulla nec mattis varius, dolor dolor fermentum purus, in lacinia diam nibh non eros. Quisque justo mi, luctus vel condimentum id, viverra vitae erat. Vivamus viverra nec odio sed rhoncus. Nulla sed metus condimentum, tincidunt dui non, volutpat neque. Sed porttitor odio non egestas molestie. Phasellus vel magna eu magna semper posuere. Cras at felis vel mauris tempor placerat non quis nisl. Aliquam condimentum lacus tellus, vel blandit ligula facilisis at. Integer orci ipsum, tempor non odio eu, rhoncus pellentesque risus. Maecenas tempus, nunc et tincidunt tristique, risus turpis placerat ligula, id condimentum libero nunc quis magna.
Ut dignissim turpis mi, ut facilisis eros varius in. Sed massa quam, scelerisque sit amet ultricies sed, facilisis quis quam. Cras commodo ante eget blandit vehicula. Sed elit mi, venenatis in sem ac, faucibus imperdiet ipsum. Fusce facilisis quam hendrerit, pellentesque quam in, sagittis dui. Suspendisse eu diam scelerisque, cursus erat ac, congue ante. Aenean eu quam nec neque pulvinar congue eu a quam. Nam sit amet urna sagittis, venenatis diam iaculis, convallis augue. Integer semper nisi ac tortor malesuada, non rhoncus leo semper. Etiam blandit pulvinar enim, euismod rutrum felis commodo id. Vestibulum velit ligula, ullamcorper porttitor est id, rhoncus accumsan dui. Maecenas ornare volutpat pellentesque. Morbi ultricies, dolor quis condimentum bibendum, sapien dolor gravida mauris, vehicula volutpat ante nulla ac mi. Curabitur euismod neque id ipsum sagittis, in imperdiet sem faucibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed tempus vel lectus at tincidunt.");
        $post->setTags("tags,teste,blog");
        $post->setAutor("Almir Junior");
        $post->setSlug('postagem-de-teste');
        $manager->persist($post);
        
        $manager->flush();
        
        $this->addReference('post1', $post);
    }
    
    public function getOrder(){
        return 1;
    }
    
}
