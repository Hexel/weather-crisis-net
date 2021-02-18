<?php

namespace App\Repository;

use App\Entity\ResourceLocation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ResourceLocation|null find($id, $lockMode = null, $lockVersion = null)
 * @method ResourceLocation|null findOneBy(array $criteria, array $orderBy = null)
 * @method ResourceLocation[]    findAll()
 * @method ResourceLocation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResourceLocationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ResourceLocation::class);
    }
}
