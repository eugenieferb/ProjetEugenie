<?php

namespace App\Entity;

class commentaire {
    private ?int $id;
    private string $surfacecom;
    private int $id_article;

    public function __construct(string $surfacecom, ?int $id = null, int $id_article )
    {
        $this->id = $id;
        $this->surfacecom = $surfacecom;
        $this->id_article = $id_article;
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
	public function getCommentaire(): string {
		return $this->surfacecom;
	}
	
	/**
	 * @param  $commentaire 
	 * @return self
	 */
	public function setCommentaire(string $commentaire): self {
		$this->surfacecom = $commentaire;
		return $this;
	}
	
	/**
	 * @return 
	 */
	public function getId_article(): int {
		return $this->id_article;
	}
	
	/**
	 * @param  $id_article 
	 * @return self
	 */
	public function setId_article(int $id_article): self {
		$this->id_article = $id_article;
		return $this;
	}
}