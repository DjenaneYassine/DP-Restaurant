<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;



#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column]
    private ?int $nb_convives = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $allergies = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\Column(type: 'json')]
    private array $roles = [];


    public function getId(): ?int
    {
        return $this->id;
    }


    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {

        $this->password = password_hash($password, PASSWORD_ARGON2I);

        return $this;
    }

    public function getNbConvives(): ?int
    {
        return $this->nb_convives;
    }

    public function setNbConvives(int $nb_convives): static
    {
        $this->nb_convives = $nb_convives;

        return $this;
    }

    public function getAllergies(): ?string
    {
        return $this->allergies;
    }

    public function setAllergies(string $allergies): static
    {
        $this->allergies = $allergies;

        return $this;
    }

    public function getSalt()
    {
        // Implémentez la logique pour retourner un sel (peut rester vide si vous n'utilisez pas de sel)
    }

    public function getUsername()
    {
        // Implémentez la logique pour retourner le nom d'utilisateur de l'utilisateur
    }

    public function eraseCredentials()
    {
        // Réinitialisez ici des données sensibles de l'utilisateur, si nécessaire
    }

    public function getRoles(): array
    {
        $roles = $this->roles;
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function getUserIdentifier(): string
    {
        return $this->email;
    }
}
