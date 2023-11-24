<form class="d-inline-block" action={{ route('comics.destroy', $comic) }} method="POST"
    onsubmit="return confirm('Sicuro di eliminare {{ $comic->title }}?')">
    @csrf
    @method('DELETE')

    <button type="submit"class="btn btn-danger">
        <i class="fa-regular fa-trash-can"></i>
    </button>
</form>
