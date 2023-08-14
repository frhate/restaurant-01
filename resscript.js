function submitForm(event) {
    event.preventDefault();
    const form = document.querySelector('.reservation-form');
    const name = form.elements.name.value;
    const date = form.elements.date.value;
    const guests = form.elements.guests.value;
    const table = form.elements.table.value;
    const message = `Reservation Details: \n\nName: ${name}\n \nDate: ${date}\nNumber of Guests: ${guests}\nTable: ${table}`;
    alert(message);
    const printWindow = window.open('', 'Print Window', 'height=400,width=600');
    printWindow.document.write(`<html><head><title>Reservation Details</title></head><body><p>${message}</p></body></html>`);
    printWindow.document.close();
    printWindow.print();
    form.reset();
}