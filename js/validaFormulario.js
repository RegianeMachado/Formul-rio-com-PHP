(function () {
    'use strict';
    function validaFormulario() {
        var $form = document.querySelector('.form');
        var $nome = document.getElementById('nome');
        var $idade = document.getElementById('idade');
        var $uf = document.getElementById('uf');

        $form.addEventListener('submit', function (e) {
            if (!$nome.value || $nome.value.length < 10) {
                alert('O campo nome deve ter no mínimo 10 letras e não pode estar vazio');
                e.preventDefault();
                return false;
            }
            if (!$idade.value || $idade.value === '0') {
                alert('Campo idade é obrigatório e não pode ser zero');
                $idade.focus();
                e.preventDefault();
                return false;
            }
            if ($uf.value === '0') {
                alert('Campo estado é obrigatório');
                $uf.focus();
                e.preventDefault();
                return false;
            } else {
                alert('dados enviados com sucesso');
            }
        });
    }
    validaFormulario();

})();