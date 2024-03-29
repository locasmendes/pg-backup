<div x-data>
    <div class="container">
        <div class="relative">

            <div class="flex inset-0 absolute justify-center items-center z-10" wire:loading.flex>
                <div class="inset-0 absolute bg-white opacity-60"></div>
                <div class="lds-ring opacity-90"><div></div><div></div><div></div><div></div></div>
            </div>

            @if (!$success)
                <form wire:submit.prevent="submit">
                    @csrf

                    <div class="mt-4">
                        <input
                            class="py-5 text-neutral-800 px-8 focus:border-cyan-400 focus:ring focus:ring-cyan-400 focus:outline-none focus:ring-opacity-50 mt-1 block w-full"
                            wire:model.defer="name" id="name" type="text" name="name" placeholder="Nome:" required>
                        @error('name') <span class="text-red-700 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="flex -mx-3 flex-wrap">
                        <div class="mt-4 px-3 md:w-8/12 w-full">
                            <input
                                class="py-5 text-neutral-800 px-8 focus:border-cyan-400 focus:ring focus:ring-cyan-400 focus:outline-none focus:ring-opacity-50 mt-1 block w-full"
                                wire:model.defer="email" id="email" type="email" name="email" placeholder="E-mail:" required>
                            @error('email') <span class="text-red-700 text-sm">{{ $message }}</span> @enderror
                        </div>

                        <div class="mt-4 px-3 md:w-4/12 w-full">
                            <input
                                class="py-5 text-neutral-800 px-8 focus:border-cyan-400 focus:ring focus:ring-cyan-400 focus:outline-none focus:ring-opacity-50 mt-1 block w-full"
                                wire:model.defer="phone" id="phone" type="text" name="phone" placeholder="Telefone com DDD:" x-mask="(99) 99999-9999" required>
                                @error('phone') <span class="text-red-700 text-sm">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div>
                        <div class="mt-4 flex justify-center flex-wrap">
                            <div class="px-8 cursor-pointer mb-4">
                                <input required type="radio" id="chkquero_maquininha" wire:model.defer="type" name="type" value="Quero minha maquininha">
                                <label class="text-passou-magenta font-medium tracking-tight" for="chkquero_maquininha">Quero minha maquininha</label>
                            </div>

                            <div class="px-8 cursor-pointer mb-4">
                                <input required type="radio" id="chkquero_vender_online" wire:model.defer="type" name="type" value="Quero vender online">
                                <label class="text-passou-magenta font-medium tracking-tight" for="chkquero_vender_online">Quero vender online</label>
                            </div>

                        </div>
                        <div class="text-center">
                            @error('type') <span class="text-red-700 text-sm">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="flex justify-center pt-8">
                        <button type="submit"
                            class="transition-colors duration-200 flex justify-center items-center font-semibold py-3 text-white bg-passou-magenta hover:bg-passou-cyan text-2xl uppercase px-16"
                            wire:loading.attr.disabled="true">
                            Enviar
                        </button>
                    </div>
                </form>
            @else
                <h2 class="text-center text-passou-magenta-800 font-bold text-2xl">Formulário enviado, logo entraremos em contato!</h2>
            @endif
        </div>
    </div>
</div>
