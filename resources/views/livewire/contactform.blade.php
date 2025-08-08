<div>
    <form wire:submit.prevent="submitForm">
    <div class="row mb-3">
        <div class="col">
            <label class="form-label fw-semibold">الاسم</label>
            <input type="text" wire:model="name" class="form-control rounded-3" placeholder="الاسم الكامل" style="box-shadow: 0 0 6px rgba(0,0,0,0.05); border: none;">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="col">
            <label class="form-label fw-semibold">البريد الإلكتروني</label>
            <input type="email" wire:model="email" class="form-control rounded-3" placeholder="example@email.com" style="box-shadow: 0 0 6px rgba(0,0,0,0.05); border: none;">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label fw-semibold">الموضوع</label>
        <input type="text" wire:model="subject" class="form-control rounded-3" placeholder="موضوع الرسالة" style="box-shadow: 0 0 6px rgba(0,0,0,0.05); border: none;">
        @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        <label class="form-label fw-semibold">الرسالة</label>
        <textarea wire:model="message" class="form-control rounded-3" rows="4" placeholder="أكتب رسالتك هنا" style="box-shadow: 0 0 6px rgba(0,0,0,0.05); border: none;"></textarea>
        @error('message') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    @if($successMessage)
        <div class="alert alert-success mb-4">
            {{ $successMessage }}
        </div>
    @endif

    @if($errorMessage)
        <div class="alert alert-danger mb-4">
            {{ $errorMessage }}
        </div>
    @endif

    <div class="text-start">
        <button type="submit" class="btn text-white rounded-4 px-5 py-2 fw-semibold"
                style="background-color: #2b3b6b; transition: background-color 0.3s;font-size: 1.4rem; font-weight: 900;">
            أرسل الرسالة
        </button>
    </div>
</form>
</div>
