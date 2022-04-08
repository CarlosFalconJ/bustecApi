<?php

namespace App\Entity;

use App\Repository\CompanyRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 * @ORM\Entity(repositoryClass=CompanyRepository::class)
 * @ORM\Table(name="empresa",
 *     uniqueConstraints={
 *   @ORM\UniqueConstraint(name="unique_cnpj_cpf", columns={"cnpj"})
 * })
 */
class Company
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="integer", nullable=true)
     */
    private $cnpj;

    /**
     * @var string
     * @ORM\Column(type="integer", nullable=true)
     */
    private $descricao;

    /**
     * @var string
     * @ORM\Column(type="integer", nullable=true)
     */
    private $email;

    /**
     * @var string
     * @ORM\Column(type="integer", nullable=true)
     */
    private $senha;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    public function setCnpj(string $cnpj): void
    {
        $this->cnpj = $cnpj;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getSenha(): string
    {
        return $this->senha;
    }

    public function setSenha(string $senha): void
    {
        $this->senha = $senha;
    }

    public function toArray()
    {
        return [
            'id' => $this->id,
            'descricao' => $this->descricao,
            'cnpj' => $this->cnpj,
            'email' => $this->email,
        ];
    }
}
