function submitForm(event) {
    event.preventDefault();
    const form = document.querySelector('.reservation-form');
    const name = form.elements.name.value;
    const date = form.elements.date.value;
    const service = form.elements.service.value;
    const type = form.elements.type.value;
    const message = ` Inscription Details : \n\nName: ${name}\n \nDate: ${date}\nSelect Your  Service : ${service}\nType of Work: ${type}`;
    alert(message);
    const printWindow = window.open('', 'Print Window', 'height=400,width=600');
    printWindow.document.write(`<html><head><title>Reservation Details</title></head><body><h3>${message}</h3></body></html>`);
    printWindow.document.close();
    printWindow.print();
    form.reset();
}