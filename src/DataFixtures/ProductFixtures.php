<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $product1 = new Product();
        $product1->setName('Hogwarts Legacy : L\'Héritage de Poudlard - Europe')
            ->setPrice(35)
            ->setDescription('Hogwarts Legacy pour PC est un jeu de rôle d\'action et d\'aventure solo basé sur l\'univers de Harry Potter, dans lequel le joueur incarne un nouveau venu dans le château enchanté tant apprécié des fans des livres et de la franchise cinématographique.')
            ->setIllustration('https://s2.gaming-cdn.com/images/products/7072/616x353/hogwarts-legacy-l-heritage-de-poudlard-PC-jeu-steam-europe-cover.jpg?v=1676112832')
            ->setQuantity(50)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("action"))
            ->addCategorize($this->getReference("aventure"))
            ->addCategorize($this->getReference("rpg"))
            ->setSupport("PC")

            ->setSupport("Switch");
        $manager->persist($product1);
        $this->addReference("product1", $product1);
        $product11 = new Product();
        $product11->setName('Hogwarts Legacy : L\'Héritage de Poudlard - Europe')
            ->setPrice(35)
            ->setDescription('Hogwarts Legacy pour PC est un jeu de rôle d\'action et d\'aventure solo basé sur l\'univers de Harry Potter, dans lequel le joueur incarne un nouveau venu dans le château enchanté tant apprécié des fans des livres et de la franchise cinématographique.')
            ->setIllustration('https://s2.gaming-cdn.com/images/products/7072/616x353/hogwarts-legacy-l-heritage-de-poudlard-PC-jeu-steam-europe-cover.jpg?v=1676112832')
            ->setQuantity(50)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("action"))
            ->addCategorize($this->getReference("aventure"))
            ->addCategorize($this->getReference("rpg"))
            ->setSupport("Playstation 5");
        $manager->persist($product11);
        $product12 = new Product();
        $product12->setName('Hogwarts Legacy : L\'Héritage de Poudlard - Europe')
            ->setPrice(60)
            ->setDescription('Hogwarts Legacy pour PC est un jeu de rôle d\'action et d\'aventure solo basé sur l\'univers de Harry Potter, dans lequel le joueur incarne un nouveau venu dans le château enchanté tant apprécié des fans des livres et de la franchise cinématographique.')
            ->setIllustration('https://s2.gaming-cdn.com/images/products/7072/616x353/hogwarts-legacy-l-heritage-de-poudlard-PC-jeu-steam-europe-cover.jpg?v=1676112832')
            ->setQuantity(50)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("action"))
            ->addCategorize($this->getReference("aventure"))
            ->addCategorize($this->getReference("rpg"))
            ->setSupport("Xbox Series");
        $manager->persist($product12);
        $product13 = new Product();
        $product13->setName('Hogwarts Legacy : L\'Héritage de Poudlard - Europe')
            ->setPrice(50)
            ->setDescription('Hogwarts Legacy pour PC est un jeu de rôle d\'action et d\'aventure solo basé sur l\'univers de Harry Potter, dans lequel le joueur incarne un nouveau venu dans le château enchanté tant apprécié des fans des livres et de la franchise cinématographique.')
            ->setIllustration('https://s2.gaming-cdn.com/images/products/7072/616x353/hogwarts-legacy-l-heritage-de-poudlard-PC-jeu-steam-europe-cover.jpg?v=1676112832')
            ->setQuantity(50)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("action"))
            ->addCategorize($this->getReference("aventure"))
            ->addCategorize($this->getReference("rpg"))
            ->setSupport("Playstation 4");
        $manager->persist($product13);
        $product14 = new Product();
        $product14->setName('Hogwarts Legacy : L\'Héritage de Poudlard - Europe')
            ->setPrice(60)
            ->setDescription('Hogwarts Legacy pour PC est un jeu de rôle d\'action et d\'aventure solo basé sur l\'univers de Harry Potter, dans lequel le joueur incarne un nouveau venu dans le château enchanté tant apprécié des fans des livres et de la franchise cinématographique.')
            ->setIllustration('https://s2.gaming-cdn.com/images/products/7072/616x353/hogwarts-legacy-l-heritage-de-poudlard-PC-jeu-steam-europe-cover.jpg?v=1676112832')
            ->setQuantity(50)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("action"))
            ->addCategorize($this->getReference("aventure"))
            ->addCategorize($this->getReference("rpg"))
            ->setSupport("Xbox One");
        $product15 = new Product();
        $product15->setName('Hogwarts Legacy : L\'Héritage de Poudlard - Europe')
            ->setPrice(70)
            ->setDescription('Hogwarts Legacy pour PC est un jeu de rôle d\'action et d\'aventure solo basé sur l\'univers de Harry Potter, dans lequel le joueur incarne un nouveau venu dans le château enchanté tant apprécié des fans des livres et de la franchise cinématographique.')
            ->setIllustration('https://s2.gaming-cdn.com/images/products/7072/616x353/hogwarts-legacy-l-heritage-de-poudlard-PC-jeu-steam-europe-cover.jpg?v=1676112832')
            ->setQuantity(50)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("action"))
            ->addCategorize($this->getReference("aventure"))
            ->addCategorize($this->getReference("rpg"))
            ->setSupport("Switch");
        $manager->persist($product15);
        $product2 = new Product();
        $product2->setName('FIFA 23')
            ->setPrice(70)
            ->setDescription('FIFA 23 pour PC est le dernier né d\'une immense lignée de jeux basés sur le football. Depuis ses modestes débuts en 1993 avec la sortie de FIFA International Soccer, cette franchise de jeux a été produite dans plus de 18 langues et 51 pays, et s\'est vendue à plus de 325 millions d\'exemplaires - un record impressionnant pour toute série de jeux vidéo.')
            ->setIllustration('https://s1.gaming-cdn.com/images/products/10545/616x353/fifa-23-PC-jeu-origin-cover.jpg?v=1665157647')
            ->setQuantity(5)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("sport"))
            ->setSupport("Playstation 5");
        $manager->persist($product2);
        $this->addReference("product2", $product2);
        $product16 = new Product();
        $product16->setName('FIFA 23')
            ->setPrice(50)
            ->setDescription('FIFA 23 pour PC est le dernier né d\'une immense lignée de jeux basés sur le football. Depuis ses modestes débuts en 1993 avec la sortie de FIFA International Soccer, cette franchise de jeux a été produite dans plus de 18 langues et 51 pays, et s\'est vendue à plus de 325 millions d\'exemplaires - un record impressionnant pour toute série de jeux vidéo.')
            ->setIllustration('https://s1.gaming-cdn.com/images/products/10545/616x353/fifa-23-PC-jeu-origin-cover.jpg?v=1665157647')
            ->setQuantity(5)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("sport"))
            ->setSupport("PC");
        $manager->persist($product16);
        $product17 = new Product();
        $product17->setName('FIFA 23')
            ->setPrice(70)
            ->setDescription('FIFA 23 pour PC est le dernier né d\'une immense lignée de jeux basés sur le football. Depuis ses modestes débuts en 1993 avec la sortie de FIFA International Soccer, cette franchise de jeux a été produite dans plus de 18 langues et 51 pays, et s\'est vendue à plus de 325 millions d\'exemplaires - un record impressionnant pour toute série de jeux vidéo.')
            ->setIllustration('https://s1.gaming-cdn.com/images/products/10545/616x353/fifa-23-PC-jeu-origin-cover.jpg?v=1665157647')
            ->setQuantity(5)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("sport"))
            ->setSupport("Playstation 4");
        $manager->persist($product17);
        $product18 = new Product();
        $product18->setName('FIFA 23')
            ->setPrice(60)
            ->setDescription('FIFA 23 pour PC est le dernier né d\'une immense lignée de jeux basés sur le football. Depuis ses modestes débuts en 1993 avec la sortie de FIFA International Soccer, cette franchise de jeux a été produite dans plus de 18 langues et 51 pays, et s\'est vendue à plus de 325 millions d\'exemplaires - un record impressionnant pour toute série de jeux vidéo.')
            ->setIllustration('https://s1.gaming-cdn.com/images/products/10545/616x353/fifa-23-PC-jeu-origin-cover.jpg?v=1665157647')
            ->setQuantity(5)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("sport"))
            ->setSupport("Xbox Series");
        $manager->persist($product18);
        $product19 = new Product();
        $product19->setName('FIFA 23')
            ->setPrice(60)
            ->setDescription('FIFA 23 pour PC est le dernier né d\'une immense lignée de jeux basés sur le football. Depuis ses modestes débuts en 1993 avec la sortie de FIFA International Soccer, cette franchise de jeux a été produite dans plus de 18 langues et 51 pays, et s\'est vendue à plus de 325 millions d\'exemplaires - un record impressionnant pour toute série de jeux vidéo.')
            ->setIllustration('https://s1.gaming-cdn.com/images/products/10545/616x353/fifa-23-PC-jeu-origin-cover.jpg?v=1665157647')
            ->setQuantity(5)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->setSupport("Xbox One");
        $manager->persist($product19);
        $product3 = new Product();
        $product3->setName('God of War')
            ->setPrice(50)
            ->setDescription('God of War pour PC a été teasé pendant des mois, à partir de la moitié de l\'année 2021 environ, jusqu\'à ce que les développeurs mettent enfin un terme à la détresse des joueurs et confirment la sortie sur PC en janvier 2022 ! Il s\'agit d’un portage PC de Gods of War sorti en 2018, qui était initialement disponible uniquement sur PlayStation. Le jeu permet aux joueurs sur PC de profiter de l\'intense jeu d\'action-aventure sur les dieux nordiques.Le jeu est le huitième de la série et se déroule dans un environnement qui, bien qu\'il ne s\'agisse pas vraiment d\'un monde ouvert mais plutôt d\'une série de lieux liés entre eux, reste vaste. Vous vous sentez rarement contraint malgré la progression linéaire du jeu.')
            ->setIllustration('https://s3.gaming-cdn.com/images/products/7325/616x353/god-of-war-PC-jeu-steam-cover.jpg?v=1668157899')
            ->setQuantity(20)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("action"))
            ->addCategorize($this->getReference("rpg"))
            ->addCategorize($this->getReference("aventure"))
            ->setSupport("Playstation 5")
            ->setSupport("Playstation 4");
        $manager->persist($product3);
        $this->addReference("product3", $product3);
        $product20 = new Product();
        $product20->setName('God of War')
            ->setPrice(30)
            ->setDescription('God of War pour PC a été teasé pendant des mois, à partir de la moitié de l\'année 2021 environ, jusqu\'à ce que les développeurs mettent enfin un terme à la détresse des joueurs et confirment la sortie sur PC en janvier 2022 ! Il s\'agit d’un portage PC de Gods of War sorti en 2018, qui était initialement disponible uniquement sur PlayStation. Le jeu permet aux joueurs sur PC de profiter de l\'intense jeu d\'action-aventure sur les dieux nordiques.Le jeu est le huitième de la série et se déroule dans un environnement qui, bien qu\'il ne s\'agisse pas vraiment d\'un monde ouvert mais plutôt d\'une série de lieux liés entre eux, reste vaste. Vous vous sentez rarement contraint malgré la progression linéaire du jeu.')
            ->setIllustration('https://s3.gaming-cdn.com/images/products/7325/616x353/god-of-war-PC-jeu-steam-cover.jpg?v=1668157899')
            ->setQuantity(20)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("action"))
            ->addCategorize($this->getReference("rpg"))
            ->addCategorize($this->getReference("aventure"))
            ->setSupport("PC");
        $manager->persist($product20);
        $product21 = new Product();
        $product21->setName('God of War')
            ->setPrice(50)
            ->setDescription('God of War pour PC a été teasé pendant des mois, à partir de la moitié de l\'année 2021 environ, jusqu\'à ce que les développeurs mettent enfin un terme à la détresse des joueurs et confirment la sortie sur PC en janvier 2022 ! Il s\'agit d’un portage PC de Gods of War sorti en 2018, qui était initialement disponible uniquement sur PlayStation. Le jeu permet aux joueurs sur PC de profiter de l\'intense jeu d\'action-aventure sur les dieux nordiques.Le jeu est le huitième de la série et se déroule dans un environnement qui, bien qu\'il ne s\'agisse pas vraiment d\'un monde ouvert mais plutôt d\'une série de lieux liés entre eux, reste vaste. Vous vous sentez rarement contraint malgré la progression linéaire du jeu.')
            ->setIllustration('https://s3.gaming-cdn.com/images/products/7325/616x353/god-of-war-PC-jeu-steam-cover.jpg?v=1668157899')
            ->setQuantity(20)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("action"))
            ->addCategorize($this->getReference("rpg"))
            ->addCategorize($this->getReference("aventure"))
            ->setSupport("Playstation 5");
        $manager->persist($product21);
        $product4 = new Product();
        $product4->setName('Returnal')
            ->setPrice(60)
            ->setDescription('Après s\'être écrasée sur ce monde protéiforme, Selene doit explorer les vestiges désolés d\'une civilisation antique pour parvenir à s\'échapper. Seule et isolée de tout, elle doit lutter pour sa survie à chaque instant. Vaincue encore et encore, forcée à recommencer son périple à chacune de ses morts. Vous découvrirez à travers un gameplay nerveux et impitoyable que la planète change à chaque nouveau cycle, et les objets à votre disposition aussi. Chaque boucle propose de nouvelles combinaisons qui repousseront vos limites et vous forceront à approcher les combats avec différentes stratégies.Avec ses effets visuels époustouflants, le monde en ruines qui vous entoure vous réserve autant de beauté obscure que de surprises explosives ; des combats frénétiques et leurs enjeux considérables aux rebondissements stupéfiants qui contrastent avec les environnements désolés. Explorez, découvrez et combattez tout au long de ce voyage impitoyable tandis qu\'un mystère vous guette depuis les ombres. Conçu pour offrir un maximum de rejouabilité, le monde procédural de Returnal vous invite à vous relever après chaque défaite, pour affronter de nouveaux défis en perpétuelle évolution à chaque renaissance.')
            ->setIllustration('https://s1.gaming-cdn.com/images/products/9666/616x353/returnal-PC-jeu-steam-cover.jpg?v=1676480255')
            ->setQuantity(100)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("action"))
            ->setSupport("PC");
        $manager->persist($product4);
        $this->addReference("product4", $product4);
        $product5 = new Product();
        $product5->setName('Wild West Dynasty')
            ->setPrice(30)
            ->setDescription('Cow-boys, colons et as de la gâchette : préparez-vous à explorer, à survivre et à construire dans le Far West en écrivant votre propre histoire ! Réussirez-vous à fonder une dynastie du Far West, ou serez-vous un gibier de potence ?\r\nWild West Dynasty est un jeu narratif aux éléments de RPG, de city-builder, de simulation de vie et de survie dans l\'Amérique des années 1800. Vous devez survivre en solitaire, trouver un endroit n\'appartenant qu\'à vous et construire les fondations de votre colonie pour les générations à venir. Fabriquez, cueillez et cultivez, recrutez des artisans et des prospecteurs parmi les pionniers, survivez à des conditions difficiles, et percez à jour les mystères entourant l\'histoire de votre famille.')
            ->setIllustration('https://s2.gaming-cdn.com/images/products/8353/616x353/wild-west-dynasty-PC-jeu-steam-cover.jpg?v=1676541625')
            ->setQuantity(100)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("action"))
            ->addCategorize($this->getReference("rpg"))
            ->addCategorize($this->getReference("aventure"))
            ->setSupport("PC");
        $manager->persist($product5);
        $this->addReference("product5", $product5);
        $product6 = new Product();
        $product6->setName('Destiny 2 : Éclipse + Pass Annuel')
            ->setPrice(100)
            ->setDescription('Précommandez pour déverrouiller instantanément l\'arme exotique Tempête de vif-argent, un nouveau Spectre exotique, une interaction exotique et un emblème légendaire.\r\nInclut Éclipse, un nouveau raid, deux donjons à paraître dans les saisons 21 et 23, un Passereau exotique, le catalyseur et ornement de Tempête de Vif-argent, et des Pass saisonniers pour les saisons 20, 21, 22 et 23.\r\nInclut aussi 4 éléments cosmétiques (un par saison) et 4 magots secrets de Rahol (un par saison) contenant chacun 2 alliages ascendants, 3 éclats ascendants, 1 cryptage exotique et 5 modules d\'amélioration.')
            ->setIllustration('https://s3.gaming-cdn.com/images/products/12728/616x353/destiny-2-eclipse-pass-annuel-PC-jeu-steam-cover.jpg?v=1661419248')
            ->setQuantity(50)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("action"))
            ->addCategorize($this->getReference("aventure"))
            ->setSupport("Xbox Series");
        $manager->persist($product6);
        $this->addReference("product6", $product6);
        $product22 = new Product();
        $product22->setName('Destiny 2 : Éclipse + Pass Annuel')
            ->setPrice(100)
            ->setDescription('Précommandez pour déverrouiller instantanément l\'arme exotique Tempête de vif-argent, un nouveau Spectre exotique, une interaction exotique et un emblème légendaire.\r\nInclut Éclipse, un nouveau raid, deux donjons à paraître dans les saisons 21 et 23, un Passereau exotique, le catalyseur et ornement de Tempête de Vif-argent, et des Pass saisonniers pour les saisons 20, 21, 22 et 23.\r\nInclut aussi 4 éléments cosmétiques (un par saison) et 4 magots secrets de Rahol (un par saison) contenant chacun 2 alliages ascendants, 3 éclats ascendants, 1 cryptage exotique et 5 modules d\'amélioration.')
            ->setIllustration('https://s3.gaming-cdn.com/images/products/12728/616x353/destiny-2-eclipse-pass-annuel-PC-jeu-steam-cover.jpg?v=1661419248')
            ->setQuantity(50)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("action"))
            ->addCategorize($this->getReference("aventure"))
            ->setSupport("Xbox One");
        $manager->persist($product22);
        $product23 = new Product();
        $product23->setName('Destiny 2 : Éclipse + Pass Annuel')
            ->setPrice(60)
            ->setDescription('Précommandez pour déverrouiller instantanément l\'arme exotique Tempête de vif-argent, un nouveau Spectre exotique, une interaction exotique et un emblème légendaire.\r\nInclut Éclipse, un nouveau raid, deux donjons à paraître dans les saisons 21 et 23, un Passereau exotique, le catalyseur et ornement de Tempête de Vif-argent, et des Pass saisonniers pour les saisons 20, 21, 22 et 23.\r\nInclut aussi 4 éléments cosmétiques (un par saison) et 4 magots secrets de Rahol (un par saison) contenant chacun 2 alliages ascendants, 3 éclats ascendants, 1 cryptage exotique et 5 modules d\'amélioration.')
            ->setIllustration('https://s3.gaming-cdn.com/images/products/12728/616x353/destiny-2-eclipse-pass-annuel-PC-jeu-steam-cover.jpg?v=1661419248')
            ->setQuantity(50)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("action"))
            ->addCategorize($this->getReference("aventure"))
            ->setSupport("PC");
        $manager->persist($product23);
        $product24 = new Product();
        $product24->setName('Destiny 2 : Éclipse + Pass Annuel')
            ->setPrice(100)
            ->setDescription('Précommandez pour déverrouiller instantanément l\'arme exotique Tempête de vif-argent, un nouveau Spectre exotique, une interaction exotique et un emblème légendaire.\r\nInclut Éclipse, un nouveau raid, deux donjons à paraître dans les saisons 21 et 23, un Passereau exotique, le catalyseur et ornement de Tempête de Vif-argent, et des Pass saisonniers pour les saisons 20, 21, 22 et 23.\r\nInclut aussi 4 éléments cosmétiques (un par saison) et 4 magots secrets de Rahol (un par saison) contenant chacun 2 alliages ascendants, 3 éclats ascendants, 1 cryptage exotique et 5 modules d\'amélioration.')
            ->setIllustration('https://s3.gaming-cdn.com/images/products/12728/616x353/destiny-2-eclipse-pass-annuel-PC-jeu-steam-cover.jpg?v=1661419248')
            ->setQuantity(50)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("action"))
            ->addCategorize($this->getReference("aventure"))
            ->setSupport("Playstation 5");
        $manager->persist($product24);
        $product25 = new Product();
        $product25->setName('Destiny 2 : Éclipse + Pass Annuel')
            ->setPrice(100)
            ->setDescription('Précommandez pour déverrouiller instantanément l\'arme exotique Tempête de vif-argent, un nouveau Spectre exotique, une interaction exotique et un emblème légendaire.\r\nInclut Éclipse, un nouveau raid, deux donjons à paraître dans les saisons 21 et 23, un Passereau exotique, le catalyseur et ornement de Tempête de Vif-argent, et des Pass saisonniers pour les saisons 20, 21, 22 et 23.\r\nInclut aussi 4 éléments cosmétiques (un par saison) et 4 magots secrets de Rahol (un par saison) contenant chacun 2 alliages ascendants, 3 éclats ascendants, 1 cryptage exotique et 5 modules d\'amélioration.')
            ->setIllustration('https://s3.gaming-cdn.com/images/products/12728/616x353/destiny-2-eclipse-pass-annuel-PC-jeu-steam-cover.jpg?v=1661419248')
            ->setQuantity(50)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("action"))
            ->addCategorize($this->getReference("aventure"))
            ->setSupport("Playstation 4");
        $manager->persist($product25);
        $product7 = new Product();
        $product7->setName('Call of Duty: Vanguard')
            ->setPrice(70)
            ->setDescription('Vous serez sur tous les fronts : combat aérien au-dessus du Pacifique, parachutage au-dessus de la France, défendez Stalingrad avec la précision d\'un tireur d\'élite et faites exploser les forces qui progressent dans votre direction en Afrique du Nord. La franchise Call of Duty revient avec Call of Duty: Vanguard, développé par Sledgehammer Games, où les joueurs seront plongés dans la Seconde Guerre mondiale, au milieu de combats sanglants et, grande première, aux 4 coins du monde.')
            ->setIllustration('https://s1.gaming-cdn.com/images/products/9384/616x353/call-of-duty-vanguard-cross-gen-bundle-xbox-one-xbox-series-x-s-cross-gen-bundle-xbox-one-xbox-series-x-s-jeu-microsoft-store-europe-cover.jpg?v=1673951854')
            ->setQuantity(100)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("action"))
            ->setSupport("Xbox One");
        $manager->persist($product7);
        $this->addReference("product7", $product7);
        $product26 = new Product();
        $product26->setName('Call of Duty: Vanguard')
            ->setPrice(50)
            ->setDescription('Vous serez sur tous les fronts : combat aérien au-dessus du Pacifique, parachutage au-dessus de la France, défendez Stalingrad avec la précision d\'un tireur d\'élite et faites exploser les forces qui progressent dans votre direction en Afrique du Nord. La franchise Call of Duty revient avec Call of Duty: Vanguard, développé par Sledgehammer Games, où les joueurs seront plongés dans la Seconde Guerre mondiale, au milieu de combats sanglants et, grande première, aux 4 coins du monde.')
            ->setIllustration('https://s1.gaming-cdn.com/images/products/9384/616x353/call-of-duty-vanguard-cross-gen-bundle-xbox-one-xbox-series-x-s-cross-gen-bundle-xbox-one-xbox-series-x-s-jeu-microsoft-store-europe-cover.jpg?v=1673951854')
            ->setQuantity(100)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("action"))
            ->setSupport("PC");
        $manager->persist($product26);
        $product27 = new Product();
        $product27->setName('Call of Duty: Vanguard')
            ->setPrice(70)
            ->setDescription('Vous serez sur tous les fronts : combat aérien au-dessus du Pacifique, parachutage au-dessus de la France, défendez Stalingrad avec la précision d\'un tireur d\'élite et faites exploser les forces qui progressent dans votre direction en Afrique du Nord. La franchise Call of Duty revient avec Call of Duty: Vanguard, développé par Sledgehammer Games, où les joueurs seront plongés dans la Seconde Guerre mondiale, au milieu de combats sanglants et, grande première, aux 4 coins du monde.')
            ->setIllustration('https://s1.gaming-cdn.com/images/products/9384/616x353/call-of-duty-vanguard-cross-gen-bundle-xbox-one-xbox-series-x-s-cross-gen-bundle-xbox-one-xbox-series-x-s-jeu-microsoft-store-europe-cover.jpg?v=1673951854')
            ->setQuantity(100)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("action"))
            ->setSupport("Playstation 5");
        $manager->persist($product27);
        $product28 = new Product();
        $product28->setName('Call of Duty: Vanguard')
            ->setPrice(70)
            ->setDescription('Vous serez sur tous les fronts : combat aérien au-dessus du Pacifique, parachutage au-dessus de la France, défendez Stalingrad avec la précision d\'un tireur d\'élite et faites exploser les forces qui progressent dans votre direction en Afrique du Nord. La franchise Call of Duty revient avec Call of Duty: Vanguard, développé par Sledgehammer Games, où les joueurs seront plongés dans la Seconde Guerre mondiale, au milieu de combats sanglants et, grande première, aux 4 coins du monde.')
            ->setIllustration('https://s1.gaming-cdn.com/images/products/9384/616x353/call-of-duty-vanguard-cross-gen-bundle-xbox-one-xbox-series-x-s-cross-gen-bundle-xbox-one-xbox-series-x-s-jeu-microsoft-store-europe-cover.jpg?v=1673951854')
            ->setQuantity(100)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("action"))
            ->setSupport("Playstation 4");
        $manager->persist($product28);
        $product29 = new Product();
        $product29->setName('Call of Duty: Vanguard')
            ->setPrice(70)
            ->setDescription('Vous serez sur tous les fronts : combat aérien au-dessus du Pacifique, parachutage au-dessus de la France, défendez Stalingrad avec la précision d\'un tireur d\'élite et faites exploser les forces qui progressent dans votre direction en Afrique du Nord. La franchise Call of Duty revient avec Call of Duty: Vanguard, développé par Sledgehammer Games, où les joueurs seront plongés dans la Seconde Guerre mondiale, au milieu de combats sanglants et, grande première, aux 4 coins du monde.')
            ->setIllustration('https://s1.gaming-cdn.com/images/products/9384/616x353/call-of-duty-vanguard-cross-gen-bundle-xbox-one-xbox-series-x-s-cross-gen-bundle-xbox-one-xbox-series-x-s-jeu-microsoft-store-europe-cover.jpg?v=1673951854')
            ->setQuantity(100)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("action"))
            ->setSupport("Xbox Series");
        $manager->persist($product29);
        $product8 = new Product();
        $product8->setName('NBA 2K23 - Europe')
            ->setPrice(50)
            ->setDescription('NBA 2K23 pour PC est le dernier né de la longue série de jeux NBA, avec des stars du basket-ball et des championnats réels.')
            ->setIllustration('https://s1.gaming-cdn.com/images/products/12480/616x353/nba-2k23-PC-jeu-steam-europe-cover.jpg?v=1663336320')
            ->setQuantity(25)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("sport"))
            ->setSupport("Switch");
        $manager->persist($product8);
        $this->addReference("product8", $product8);
        $product30 = new Product();
        $product30->setName('NBA 2K23 - Europe')
            ->setPrice(35)
            ->setDescription('NBA 2K23 pour PC est le dernier né de la longue série de jeux NBA, avec des stars du basket-ball et des championnats réels.')
            ->setIllustration('https://s1.gaming-cdn.com/images/products/12480/616x353/nba-2k23-PC-jeu-steam-europe-cover.jpg?v=1663336320')
            ->setQuantity(25)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("sport"))
            ->setSupport("PC");
        $manager->persist($product30);
        $product31 = new Product();
        $product31->setName('NBA 2K23 - Europe')
            ->setPrice(40)
            ->setDescription('NBA 2K23 pour PC est le dernier né de la longue série de jeux NBA, avec des stars du basket-ball et des championnats réels.')
            ->setIllustration('https://s1.gaming-cdn.com/images/products/12480/616x353/nba-2k23-PC-jeu-steam-europe-cover.jpg?v=1663336320')
            ->setQuantity(25)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("sport"))
            ->setSupport("Playstation 5");
        $manager->persist($product31);
        $product32 = new Product();
        $product32->setName('NBA 2K23 - Europe')
            ->setPrice(40)
            ->setDescription('NBA 2K23 pour PC est le dernier né de la longue série de jeux NBA, avec des stars du basket-ball et des championnats réels.')
            ->setIllustration('https://s1.gaming-cdn.com/images/products/12480/616x353/nba-2k23-PC-jeu-steam-europe-cover.jpg?v=1663336320')
            ->setQuantity(25)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("sport"))
            ->setSupport("Playstation 4");
        $manager->persist($product32);
        $product33 = new Product();
        $product33->setName('NBA 2K23 - Europe')
            ->setPrice(40)
            ->setDescription('NBA 2K23 pour PC est le dernier né de la longue série de jeux NBA, avec des stars du basket-ball et des championnats réels.')
            ->setIllustration('https://s1.gaming-cdn.com/images/products/12480/616x353/nba-2k23-PC-jeu-steam-europe-cover.jpg?v=1663336320')
            ->setQuantity(25)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("sport"))
            ->setSupport("Xbox Series");
        $manager->persist($product33);
        $product34 = new Product();
        $product34->setName('NBA 2K23 - Europe')
            ->setPrice(40)
            ->setDescription('NBA 2K23 pour PC est le dernier né de la longue série de jeux NBA, avec des stars du basket-ball et des championnats réels.')
            ->setIllustration('https://s1.gaming-cdn.com/images/products/12480/616x353/nba-2k23-PC-jeu-steam-europe-cover.jpg?v=1663336320')
            ->setQuantity(25)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("sport"))
            ->setSupport("Xbox One");
        $manager->persist($product34);
        $product9 = new Product();
        $product9->setName("Marvel's Spider-Man: Miles Morales")
            ->setPrice(50)
            ->setDescription('Après les événements de Marvel’s Spider-Man Remastered, le jeune Miles Morales prend ses marques dans son nouveau foyer en marchant dans les pas de son mentor, Peter Parker, en tant que nouveau Spider-Man. Mais quand une lutte de pouvoir menace de détruire sa ville, le héros en devenir se rend compte qu\'un grand pouvoir implique de grandes responsabilités. Pour sauver le New York de Marvel, Miles va devoir endosser la tenue de Spider-Man et s\'en montrer digne')
            ->setIllustration('https://s3.gaming-cdn.com/images/products/12953/616x353/marvel-s-spider-man-miles-morales-PC-jeu-steam-cover.jpg?v=1673341651')
            ->setQuantity(100)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("action"))
            ->addCategorize($this->getReference("aventure"))
            ->addCategorize($this->getReference("rpg"))
            ->setSupport("Playstation 4");
        $manager->persist($product9);
        $this->addReference("product9", $product9);
        $product35 = new Product();
        $product35->setName("Marvel's Spider-Man: Miles Morales")
            ->setPrice(33.50)
            ->setDescription('Après les événements de Marvel’s Spider-Man Remastered, le jeune Miles Morales prend ses marques dans son nouveau foyer en marchant dans les pas de son mentor, Peter Parker, en tant que nouveau Spider-Man. Mais quand une lutte de pouvoir menace de détruire sa ville, le héros en devenir se rend compte qu\'un grand pouvoir implique de grandes responsabilités. Pour sauver le New York de Marvel, Miles va devoir endosser la tenue de Spider-Man et s\'en montrer digne')
            ->setIllustration('https://s3.gaming-cdn.com/images/products/12953/616x353/marvel-s-spider-man-miles-morales-PC-jeu-steam-cover.jpg?v=1673341651')
            ->setQuantity(100)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("action"))
            ->addCategorize($this->getReference("aventure"))
            ->addCategorize($this->getReference("rpg"))
            ->setSupport("PC");
        $manager->persist($product35);
        $product36 = new Product();
        $product36->setName("Marvel's Spider-Man: Miles Morales")
            ->setPrice(50)
            ->setDescription('Après les événements de Marvel’s Spider-Man Remastered, le jeune Miles Morales prend ses marques dans son nouveau foyer en marchant dans les pas de son mentor, Peter Parker, en tant que nouveau Spider-Man. Mais quand une lutte de pouvoir menace de détruire sa ville, le héros en devenir se rend compte qu\'un grand pouvoir implique de grandes responsabilités. Pour sauver le New York de Marvel, Miles va devoir endosser la tenue de Spider-Man et s\'en montrer digne')
            ->setIllustration('https://s3.gaming-cdn.com/images/products/12953/616x353/marvel-s-spider-man-miles-morales-PC-jeu-steam-cover.jpg?v=1673341651')
            ->setQuantity(100)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("action"))
            ->addCategorize($this->getReference("aventure"))
            ->addCategorize($this->getReference("rpg"))
            ->setSupport("Playstation 5");
        $manager->persist($product36);
        $product10 = new Product();
        $product10->setName("Les Sims 4 Grandir ensemble")
            ->setPrice(30)
            ->setDescription('Renforcez les liens familiaux, faites-vous des amis ou des ennemis et découvrez la véritable identité de vos Sims avec le pack d’extension Les Sims 4 Grandir ensemble. Les façons dont vos Sims nouent des liens avec ceux qui les entourent, des membres de leur famille aux nouvelles rencontres, évoluent. Des événements planifiés comme des soirées pyjamas et des étapes inattendues comme une crise de la quarantaine façonnent vos Sims et leurs relations. Achetez le pack maintenant pour obtenir des objets bonus pour les enfants, les bambins et les parents avec le contenu numérique Les Sims 4 Jeux d\'extérieur**, disponible dans le jeu lors de sa sortie le 16 mars.')
            ->setIllustration('https://s3.gaming-cdn.com/images/products/13535/616x353/les-sims-4-grandir-ensemble-PC-mac-jeu-origin-cover.jpg?v=1675435162')
            ->setQuantity(100)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("action"))
            ->addCategorize($this->getReference("aventure"))
            ->addCategorize($this->getReference("simulation"))
            ->setSupport("Xbox One");
        $manager->persist($product10);
        $this->addReference("product10", $product10);
        $product37 = new Product();
        $product37->setName("Les Sims 4 Grandir ensemble")
            ->setPrice(10)
            ->setDescription('Renforcez les liens familiaux, faites-vous des amis ou des ennemis et découvrez la véritable identité de vos Sims avec le pack d’extension Les Sims 4 Grandir ensemble. Les façons dont vos Sims nouent des liens avec ceux qui les entourent, des membres de leur famille aux nouvelles rencontres, évoluent. Des événements planifiés comme des soirées pyjamas et des étapes inattendues comme une crise de la quarantaine façonnent vos Sims et leurs relations. Achetez le pack maintenant pour obtenir des objets bonus pour les enfants, les bambins et les parents avec le contenu numérique Les Sims 4 Jeux d\'extérieur**, disponible dans le jeu lors de sa sortie le 16 mars.')
            ->setIllustration('https://s3.gaming-cdn.com/images/products/13535/616x353/les-sims-4-grandir-ensemble-PC-mac-jeu-origin-cover.jpg?v=1675435162')
            ->setQuantity(100)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("action"))
            ->addCategorize($this->getReference("aventure"))
            ->addCategorize($this->getReference("simulation"))
            ->setSupport("PC");
        $manager->persist($product37);
        $product38 = new Product();
        $product38->setName("Les Sims 4 Grandir ensemble")
            ->setPrice(35.99)
            ->setDescription('Renforcez les liens familiaux, faites-vous des amis ou des ennemis et découvrez la véritable identité de vos Sims avec le pack d’extension Les Sims 4 Grandir ensemble. Les façons dont vos Sims nouent des liens avec ceux qui les entourent, des membres de leur famille aux nouvelles rencontres, évoluent. Des événements planifiés comme des soirées pyjamas et des étapes inattendues comme une crise de la quarantaine façonnent vos Sims et leurs relations. Achetez le pack maintenant pour obtenir des objets bonus pour les enfants, les bambins et les parents avec le contenu numérique Les Sims 4 Jeux d\'extérieur**, disponible dans le jeu lors de sa sortie le 16 mars.')
            ->setIllustration('https://s3.gaming-cdn.com/images/products/13535/616x353/les-sims-4-grandir-ensemble-PC-mac-jeu-origin-cover.jpg?v=1675435162')
            ->setQuantity(100)
            ->setAvailableAt(new \DateTimeImmutable())
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsActive(true)
            ->addCategorize($this->getReference("action"))
            ->addCategorize($this->getReference("aventure"))
            ->addCategorize($this->getReference("simulation"))
            ->setSupport("Playstation 4");
        $manager->persist($product38);
        $manager->flush();
    }
    public function getDependencies()
    {
        return [
            CategoryFixtures::class
        ];
    }
}
