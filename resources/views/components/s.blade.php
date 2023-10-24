<script>

    var selectElement = document.getElementById("penerbit_id");
    var selectedValue = "{{ $buku->penerbit_id }}";
    for (var i = 0; i < selectElement.options.length; i++) {
    var option = selectElement.options[i];
    if (option.value === selectedValue) {
        option.selected = true;
    }
}
</script>
