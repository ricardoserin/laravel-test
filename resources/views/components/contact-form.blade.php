<form class="section__form contact-form">
    <div class="contact-form__title">
        Contáctanos
    </div>
    <div class="contact-form__body">
        <x-common.input label="Nombre" inputName="name" placeholder="Nombre">
            <x-slot name="error">Nombre incorrecto</x-slot>
        </x-common.input>
        <x-common.input label="Email" inputName="email" placeholder="Correo electrónico" type="text">
            <x-slot name="error">Email incorrecto</x-slot>
        </x-common.input>
        <div class="contact-form__element contact-form__element--textarea">
            <label for="message">Mensaje</label>
            <textarea type="text" name="message" placeholder="Mensaje" rows="4"></textarea>
        </div>
    </div>
    {{$slot}}
    <div class="contact-form__button">
        <button type="submit">Enviar</button>
    </div>
    {{$error}}
</form>