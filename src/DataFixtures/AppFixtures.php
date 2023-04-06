<?php

namespace App\DataFixtures;

use App\Entity\Produits;
use App\Entity\Articles;

use App\Entity\Auteur;
use App\Entity\Categorie;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        // créer 20 produits! Bam!
        for ($i = 0; $i < 20; $i++) {
            $product = new Produits();
            $product->setTitle('product '.$i);
            $product->setDescription('Description produit '.$i);
            $product->setPrix(mt_rand(10, 100));
            $manager->persist($product);
        }

        $manager->flush();

        // créer 20 articles! Bam!
        for ($i = 0; $i < 20; $i++) {
            $article = new Articles();
            $article->setTitle('article '.$i);
            $article->setContenu('Description produit '.$i);
            $article->setAuteur('Auteur '.$i);
            $manager->persist($article);
        }

        $manager->flush();

        // créer 20 auteurs! Bam!
        for ($i = 0; $i < 20; $i++) {
            $auteur = new Auteur();
            $auteur->setNom('Nom '.$i);
            $auteur->setPrenom('Prénom '.$i);
            $auteur->setEmail('email'.$i.'@gmail.com');
            $auteur->setAdresse('Adresse '.$i);
            $manager->persist($auteur);
        }

        $manager->flush();

        // créer 20 auteurs! Bam!
        for ($i = 0; $i < 20; $i++) {
            $categorie = new Categorie();
            $categorie->setTitre('Titre '.$i);
            $categorie->setDescription('Description '.$i);
            $manager->persist($categorie);
        }

        $manager->flush();

    }
}
?>