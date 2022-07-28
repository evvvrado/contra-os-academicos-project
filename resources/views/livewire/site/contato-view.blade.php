<div class="niv">
    @if($ok == 'nao') 
        <form wire:submit.prevent="enviar_email()" wire:loading.remove>
            <label>
                <input wire:model.defer="nome" type="text" placeholder="Nome">
            </label>
            <label>
                <input wire:model.defer="email" type="email" placeholder="E-mail">
            </label>
            <label>
                <input wire:model.defer="assunto" type="text" placeholder="Assunto">
            </label>

            <label>
                <textarea wire:model.defer="mensagem" placeholder="Escreva sua Mensagem" name="mensagem"></textarea>
            </label>

            <button class="button">Enviar</button>
        </form>
    @else 
        Sua mensagem foi enviada a nossa equipe. <br>
        Retornaremos em breve! 😀
    @endif

    <div wire:loading>Aguarde, estamos enviando sua mensagem...</div>
</div>
