<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;
use Nette\Application\UI\Form;


final class SignPresenter extends Nette\Application\UI\Presenter {

    protected function createComponentSignForm(): Form {

	$form = new Form; // means Nette\Application\UI\Form

	$form->addEmail('email', 'E-mail:');
    

	$form->addPassword('password', 'Heslo:')
		->setRequired();
    

	$form->addSubmit('send', 'Přihlásit');
    
	return $form;
}

}