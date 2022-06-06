<?php

namespace App\Entity;

use App\Repository\ProgramRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProgramRepository::class)
 */
class Program
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $label;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity=ProgramSessionRel::class, mappedBy="program")
     */
    private $programSessionRel;

    public function __construct()
    {
        $this->programSessionRel = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, ProgramSessionRel>
     */
    public function getProgramSessionRel(): Collection
    {
        return $this->programSessionRel;
    }

    public function addProgramSessionRel(ProgramSessionRel $programSessionRel): self
    {
        if (!$this->programSessionRel->contains($programSessionRel)) {
            $this->programSessionRel[] = $programSessionRel;
            $programSessionRel->setProgram($this);
        }

        return $this;
    }

    public function removeProgramSessionRel(ProgramSessionRel $programSessionRel): self
    {
        if ($this->programSessionRel->removeElement($programSessionRel)) {
            // set the owning side to null (unless already changed)
            if ($programSessionRel->getProgram() === $this) {
                $programSessionRel->setProgram(null);
            }
        }

        return $this;
    }
}
