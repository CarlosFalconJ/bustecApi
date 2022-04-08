<?php

namespace App\Entity;

use App\Repository\LoginRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass=LoginRepository::class)
 * @ORM\Table(name="login",
 *  indexes={
 *      @ORM\Index(name="idx_email", columns={"email"}),
 *      @ORM\Index(name="idx_login", columns={"login"})
 *  },
 * uniqueConstraints={
 *      @ORM\UniqueConstraint(name="unique_login", columns={"login"})
 * })
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="tipo", type="integer")
 */
abstract class Login
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $login;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    protected $descricao;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $senha;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $email;

    /**
     * @var integer
     * @ORM\Column(type="integer")
     */
    protected $permissao;

    /**
     * @var integer
     * @ORM\Column(type="integer",options={"default":"0"}, nullable=true)
     */
    protected $numero;

    /**
     * @var Company
     * @ORM\ManyToOne(targetEntity="Company")
     * @ORM\JoinColumn(name="id_company",referencedColumnName="id", onDelete="CASCADE")
     */
    private $company;

    abstract public function getTipo();

    public function __construct()
    {
        $this->permissao = 2;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogin(): string
    {
        return $this->login;
    }

    public function setLogin(string $login): void
    {
        $this->login = $login;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }

    public function getSenha(): string
    {
        return $this->senha;
    }

    public function setSenha(string $senha): void
    {
        $this->senha = $senha;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPermissao(): int
    {
        return $this->permissao;
    }

    public function setPermissao(int $permissao): void
    {
        $this->permissao = $permissao;
    }

    public function getNumero(): int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): void
    {
        $this->numero = $numero;
    }

    public function getCompany(): Company
    {
        return $this->company;
    }

    public function setCompany(Company $company): void
    {
        $this->company = $company;
    }

    public function toArray()
    {
        return [
            'id' => $this->id,
            'tipo' => $this->getTipo(),
            'login' => $this->login,
            'email' => $this->email,
            'descricao' => $this->descricao,
            'numero' => $this->numero,
            'monitoramento' => ($this->company) ? $this->company->getId(): null,
        ];
    }
}
