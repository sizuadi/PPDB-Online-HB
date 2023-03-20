<template>
    <div>
        <div v-show="step === 1">
            <div class="col-12">
                <div class="form-group">
                    <label>Nama</label>
                    <input
                        type="text"
                        name="nama"
                        class="form-control"
                        autocomplete="off"
                        autofocus
                    />
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>No Telepon</label>
                    <input
                        type="number"
                        name="no_telp"
                        class="form-control"
                        autocomplete="off"
                    />
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Agama</label>
                    <select name="id_agama" class="form-control">
                        @forelse ($agama as $item)
                        <option value="{{ $item->id }}">
                            {{ $item->nama_agama }}
                        </option>
                        @empty
                        <option value="">NO Data</option>
                        @endforelse
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input
                        type="date"
                        name="tanggal_lahir"
                        class="form-control"
                        autocomplete="off"
                    />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input
                        type="text"
                        name="tempat_lahir"
                        class="form-control"
                        autocomplete="off"
                    />
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Asal Sekolah</label>
                    <input
                        type="text"
                        name="asal_sekolah"
                        class="form-control"
                        autocomplete="off"
                    />
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea
                        name="alamat"
                        rows="10"
                        class="form-control"
                    ></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Jurusan</label>
                    <select name="id_jurusan" class="form-control">
                        @forelse ($jurusan as $item)
                        <option value="{{ $item->id }}">
                            {{ $item->jurusan }}
                        </option>
                        @empty
                        <option value="">NO Data</option>
                        @endforelse
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="id_jenis_kelamin" class="form-control">
                        @forelse ($jenkel as $item)
                        <option value="{{ $item->id }}">
                            {{ $item->jenis_kelamin }}
                        </option>
                        @empty
                        <option value="">NO Data</option>
                        @endforelse
                    </select>
                </div>
            </div>
        </div>
        <div v-show="step === 2">
            <!-- Isi form untuk step kedua -->
        </div>
        <div v-show="step === 3">
            <!-- Isi form untuk step ketiga -->
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            step: 1,
        };
    },
    methods: {
        nextStep() {
            this.step++;
        },
        prevStep() {
            this.step--;
        },
    },
};
</script>
