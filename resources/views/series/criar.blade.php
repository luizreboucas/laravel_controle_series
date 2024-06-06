<x-layout title="Series">
   
    <div>
        <form action="{{route("series.store")}}" method="POST">
            @csrf
            <label for="nome" class="form-label">Nome da Série</label>
            <input type="text" class="form-control" id="nome" name="nome">
            <button class="btn btn-primary mt-2">criar série</button>
        </form>
    </div> 
</x-layout>