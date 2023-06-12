<div class="col-md-12">
    <label for="titulo" class="form-label">Título</label>
    <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Insira o Título">
</div>

<div class="col-md-12">
    <label for="descricao" class="form-label">Descrição</label>
    <textarea name="descricao" id="descricao" cols="30" rows="10" class="form-control"></textarea>
</div>

<div class="col-md-2">
    <label for="categoria" class="form-label">Categoria</label>
    <select class="form-control" id="categoria_id" name="categoria_id">
        <option>Selecione a Categoria</option>
        @foreach ($categorias as $categoria)
            <option value="{{ $categoria->id }}">{{ $categoria->titulo }}</option>
        @endforeach
    </select>
</div>

<div class="col-md-2">
    <label for="valor" class="form-label">Valor</label>
    <input type="text" class="form-control" name="valor" id="valor">
</div>

<div class="col-md-12">
    <label for="foto" class="form-label">Foto</label>
    <input type="file" class="form-control" name="foto" id="foto">
</div>



<div class="col-12 mb-3">
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>
