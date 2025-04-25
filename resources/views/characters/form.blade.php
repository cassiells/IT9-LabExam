<div class="mb-3">
    <input name="name" class="form-control form-control-mb-2"  placeholder="Name"
        value="{{ old('name', $character->name ?? '') }}" required>
</div>

<div class="mb-3">
    <input name="power" class="form-control form-control-mb-2" placeholder="Power"
        value="{{ old('power', $character->power ?? '') }}">
</div>

<div class="mb-3">
    <input name="universe" class="form-control form-control-mb-2" placeholder="Universe"
        value="{{ old('universe', $character->universe ?? '') }}">
</div>
