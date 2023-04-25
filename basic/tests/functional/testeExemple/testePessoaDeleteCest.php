<?php
class testePessoaDeleteCest
{
    // Delete
    public function testePessoaDelete(FunctionalTester $I)
    {
        $I->wantTo(' Verificar se a deleção de informações de uma pessoa está correta.
');
        $model = $I->grabRecord('app\models\Pessoa', array('nome' => 'Joao Pedro'));
        $id = $model->id;
        $I->amOnRoute('pessoa/delete', ['id' => $id]);
        $I->dontSeeRecord('app\models\Pessoa', [
            'id' => $id,
            'nome' => $model->nome,
        ]);
    }
}
