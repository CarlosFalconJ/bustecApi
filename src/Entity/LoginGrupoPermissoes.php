<?php

namespace App\Entity;

use App\Repository\LoginGrupoPermissoesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LoginGrupoPermissoesRepository::class)
 * @ORM\Table(name="login_grupo_permissoes")
 */
class LoginGrupoPermissoes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @var Company
     * @ORM\ManyToOne(targetEntity="Company")
     * @ORM\JoinColumn(name="id_monitoramento",referencedColumnName="id", onDelete="CASCADE")
     */
    private $company;

    /**
     * @var string
     * @ORM\Column(type="string", nullable = true)
     */
    private $descricao;
}
