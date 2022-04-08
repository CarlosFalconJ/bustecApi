<?php

namespace App\Entity;

use App\Repository\LoginCompanyPermissoesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LoginCompanyPermissoesRepository::class)
 * @ORM\Table(name="login_company_permissoes",
 * uniqueConstraints={
 *      @ORM\UniqueConstraint(name="", columns={"id_login"}),
 * })
 */
class LoginCompanyPermissoes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var LoginCompany
     * @ORM\OneToOne(targetEntity="LoginCompany",inversedBy="permissoes")
     * @ORM\JoinColumn(name="id_login",referencedColumnName="id", onDelete="CASCADE")
     */
    private $login;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"default":true})
     */
    private $permissao_total;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogin(): LoginCompany
    {
        return $this->login;
    }

    public function setLogin(LoginCompany $login): void
    {
        $this->login = $login;
    }

    public function isPermissaoTotal(): bool
    {
        return $this->permissao_total;
    }

    public function setPermissaoTotal(bool $permissao_total): void
    {
        $this->permissao_total = $permissao_total;
    }
}
