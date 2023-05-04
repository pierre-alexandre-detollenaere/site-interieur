<?php

namespace App\Entity;

use App\Entity\Produit;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $slug = null;

    #[ORM\ManyToMany(targetEntity: Article::class, mappedBy: 'categories')]
    private Collection $articles;

    #[ORM\OneToMany(mappedBy: 'categorie', targetEntity: Produit::class, orphanRemoval: true)]
    private Collection $produits;

    // permet l'affichage de la liste des Produits par Catégorie "Nos prestations" puis sélection de la Catégorie
    //(ne fonctionne qu'avec la ligne ci-dessous en commentaires, mais après avoir fait la migration en utilisant la ligne du dessous à la place de celle-ci)

    // #[ORM\OneToMany(mappedBy: 'categories', targetEntity: Produit::class)]
    // private Collection $produits;
    // permet l'affichage depuis la bdd de la catégorie dans le tableau récap "liste des prestations" - migration n°Version20230222130443
    // résolu, a priori, avec l'ajout ci-desssous et nouvelle migration faite n°Version20230222130443

    #[ORM\OneToMany(mappedBy: 'categories', targetEntity: Produit::class)]
    private Collection $produits2;


    public function __construct()
    {
        $this->articles = new ArrayCollection();
        $this->produits = new ArrayCollection();
        $this->produits2 = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return Collection<int, Article>
     */
    public function getArticles(): Collection
    {
        return $this->articles;
    }

    public function addArticle(Article $article): self
    {
        if (!$this->articles->contains($article)) {
            $this->articles->add($article);
            $article->addCategory($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->articles->removeElement($article)) {
            $article->removeCategory($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Produit>
     */
    public function getProduits(): Collection
    {
        return $this->produits;
    }

    public function addProduit(Produit $produit): self
    {
        if (!$this->produits->contains($produit)) {
            $this->produits->add($produit);
            $produit->setCategorie($this);
        }

        return $this;
    }

    public function removeProduit(Produit $produit): self
    {
        if ($this->produits->removeElement($produit)) {
            // set the owning side to null (unless already changed)
            if ($produit->getCategorie() === $this) {
                $produit->setCategorie(null);
            }
        }

        return $this;
    }


    /**
     * @return Collection<int, Produit>
     */
    public function getProduits2(): Collection
    {
        return $this->produits2;
    }

    public function addProduits2(Produit $produits2): self
    {
        if (!$this->produits2->contains($produits2)) {
            $this->produits2->add($produits2);
            $produits2->setCategories($this);
        }

        return $this;
    }

    public function removeProduits2(Produit $produits2): self
    {
        if ($this->produits2->removeElement($produits2)) {
            // set the owning side to null (unless already changed)
            if ($produits2->getCategories() === $this) {
                $produits2->setCategories(null);
            }
        }

        return $this;
    }

}
