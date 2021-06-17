<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\WinnerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=WinnerRepository::class)
 */
class Winner
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LotteryDraw", inversedBy="winners")
     */
    private $lotteryDraw;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $code;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of lotteryDraw
     */ 
    public function getLotteryDraw()
    {
        return $this->lotteryDraw;
    }

    /**
     * Set the value of lotteryDraw
     *
     * @return  self
     */ 
    public function setLotteryDraw($lotteryDraw)
    {
        $this->lotteryDraw = $lotteryDraw;

        return $this;
    }
}
