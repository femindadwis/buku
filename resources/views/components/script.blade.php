<script>
    var selectElement = document.getElementById("role");
    var selectedValue = "{{ $u->role }}";
    for (var i = 0; i < selectElement.options.length; i++) {
        var option = selectElement.options[i];
        if (option.value === selectedValue) {
            option.selected = true;
        }
    }
</script>

