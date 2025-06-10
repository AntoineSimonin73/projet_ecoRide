<?php

namespace App\Command;

use App\Document\RideStats;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'test:mongodb',
    description: 'Teste la connexion à MongoDB et récupère les documents View',
)]
class TestMongodbCommand extends Command
{
    public function __construct(private DocumentManager $documentManager)
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        try {
            $views = $this->documentManager->getRepository(RideStats::class)->findAll();
            $output->writeln("Connexion MongoDB OK ✅");
            $output->writeln("Documents récupérés : " . count($views));
            return Command::SUCCESS;
        } catch (\Throwable $e) {
            $output->writeln("<error>Erreur de connexion MongoDB :</error>");
            $output->writeln($e->getMessage());
            return Command::FAILURE;
        }
    }
}