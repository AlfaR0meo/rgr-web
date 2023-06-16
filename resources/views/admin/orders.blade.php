<script>

    async function testOrders() {
        let response = await fetch("./get_orders", {
            method: "GET"
        });

        let text = await response.text();
        debugger;
        let orders = JSON.parse(text);
        debugger;
    }

    testOrders();


</script>