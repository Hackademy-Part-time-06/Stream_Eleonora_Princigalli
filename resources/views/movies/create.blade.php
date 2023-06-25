<x-main>

    <section class="py-5">
        <div class="container px-5">
            <div class=" rounded-3 py-5 px-4 px-md-5 mb-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action={{ 'movies.store' }} method="POST" enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                           
                            <div class="mb-3">
                                <label for="name" class="form-label">Nome</label>
                                <input name="name" type="string" class="form-control" id="name" placeholder="Nome anime" value="{{old('name')}}" >
                                
                            </div>
                            <div class="mb-3">
                                <label for="durata" class="form-label">Durata</label>
                                <input name="durata" type="number" class="form-control" id="durata" placeholder="Durata" value="{{old('durata')}}">
                                
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Immagine</label>
                                <input class="form-control" name="image" id="image" type="file" placeholder="" />
                            </div>
                        
                            <button type="submit" class="btn btn-primary">Salva</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-main>
