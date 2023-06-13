<?php

namespace App\Entity;

class article {
    private ?int $id;
    private string $title;
    private string $description;
    private string $user;
    private string $img;
    private ?int $id_categorie;

    public function __construct(string $title, string $description, string $user, string $img, ?int $id_categorie , ?int $id = null)
    {
        $this->id = $id;
        $this->user = $user;
        $this->title = $title;
        $this->description = $description;
        $this->img = $img;
        $this->id_categorie = $id_categorie;
    }


	/**
	 * @return 
	 */
	public function getId(): ?int {
		return $this->id;
	}
	
	/**
	 * @param  $id 
	 * @return self
	 */
	public function setId(?int $id): self {
		$this->id = $id;
		return $this;
	}
	
	/**
	 * @return 
	 */
	public function getTitle(): string {
		return $this->title;
	}
	
	/**
	 * @param  $title 
	 * @return self
	 */
	public function setTitle(string $title): self {
		$this->title = $title;
		return $this;
	}
	
	/**
	 * @return 
	 */
	public function getDescription(): string {
		return $this->description;
	}
	
	/**
	 * @param  $description 
	 * @return self
	 */
	public function setDescription(string $description): self {
		$this->description = $description;
		return $this;
	}
	
	/**
	 * @return 
	 */
	public function getUser(): string {
		return $this->user;
	}
	
	/**
	 * @param  $user 
	 * @return self
	 */
	public function setUser(string $user): self {
		$this->user = $user;
		return $this;
	}

	/**
	 * @return 
	 */
	public function getImg(): string {
		return $this->img;
	}
	
	/**
	 * @param  $img 
	 * @return self
	 */
	public function setImg(string $img): self {
		$this->img = $img;
		return $this;
	}
	
	/**
	 * @return 
	 */
	public function getId_categorie(): int {
		return $this->id_categorie;
	}
	
	/**
	 * @param  $id_categorie 
	 * @return self
	 */
	public function setId_categorie(int $id_categorie): self {
		$this->id_categorie = $id_categorie;
		return $this;
	}
}