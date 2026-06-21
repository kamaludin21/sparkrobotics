<x-filament-panels::page>
  <form wire:submit="update" class="space-y-6">
    {{ $this->form }}

    <x-filament::button type="submit" style="margin-top: 1rem;"> 
      Simpan Perubahan
    </x-filament::button>
  </form>
</x-filament-panels::page>
