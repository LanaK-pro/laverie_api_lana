<?php

namespace App\Entity;

use App\Repository\CartItemRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CartItemRepository::class)]
class CartItem
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $serviceQuantity = null;

    #[ORM\Column]
    private ?float $total = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getServiceQuantity(): ?int
    {
        return $this->serviceQuantity;
    }

    public function setServiceQuantity(int $serviceQuantity): static
    {
        $this->serviceQuantity = $serviceQuantity;

        return $this;
    }

    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function setTotal(float $total): static
    {
        $this->total = $total;

        return $this;
    }

    public function getServiceId(): ?int
    {
        return $this->service_id;
    }

    public function setServiceId(int $service_id): static
    {
        $this->service_id = $service_id;

        return $this;
    }
}
