<?php

namespace App\Entity;

use App\Repository\LoginCompanyRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LoginCompanyRepository::class)
 */
class LoginCompany extends Login
{
    const TIPO_PERMISSAO_TOTAL = 1;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var LoginCompanyPermissoes
     * @ORM\OneToOne(targetEntity="LoginCompanyPermissoes", mappedBy="login",cascade={"persist","remove"}))
     */
    protected $permissoes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipo()
    {
        return 1;
    }

    public function getPermissoes()
    {
        return $this->permissoes;
    }

    public function __construct()
    {
        parent::__construct();
        $this->permissoes = new LoginCompanyPermissoes();
        $this->permissoes->setLogin($this);
    }

    public function getLoginInfo()
    {
        return [
            'id' => self::getHashById($this->id),
            'login' => $this->login,
            'email' => $this->email,
            'descricao' => $this->descricao,
            "monitoramento" => self::getHashById($this->getCompany()->getId())
        ];
    }

    public function toSelect(){
        return ["id" => $this->id,
            "text" => $this->descricao];
    }

    static function getHashById($id)
    {
        return base64_encode($id. "BUSTECHASHGENERATOR2021_BUSTEC_STARTUP");
    }
}
