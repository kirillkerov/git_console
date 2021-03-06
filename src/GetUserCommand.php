<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Question\Question;

class GetUserCommand extends Command
{
    protected function configure()
    {
        parent::configure(); // TODO: Change the autogenerated stub

        $this
            ->setName('User')
        ;

    }

    public function execute(InputInterface $input, OutputInterface $output): int
    {

        $helper = $this->getHelper('question');

        $questionName = new Question('Р’РІРµРґРёС‚Рµ РІР°С€Рµ РёРјСЏ: ');
        $name = $helper->ask($input, $output, $questionName);

        $questionAge = new Question('Р’РІРµРґРёС‚Рµ РІР°С€ РІРѕР·СЂР°СЃС‚: ');
        $age = $helper->ask($input, $output, $questionAge);

        $question = new ChoiceQuestion(
            'Р’Р°С€ РїРѕР» (Рј):',
            ['Рј', 'Р¶'],
            0
        );
        $question->setErrorMessage('РќРµРєРѕСЂСЂРµРєС‚РЅС‹Р№ РІС‹Р±РѕСЂ!');


        $color = $helper->ask($input, $output, $question);
        $output->writeln('Р—РґСЂР°РІСЃС‚РІСѓР№С‚Рµ, ' . $name . '! Р’Р°С€ РІРѕР·СЂР°СЃС‚: ' . $age . ', РІР°С€ РїРѕР»: ' . $color);

        return Command::SUCCESS;

    }
}
