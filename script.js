const stripe = Stripe("pk_test_51Ji721D4KMB6EijwF8jwj86OtrWCzaFICidJll4l59VrgQrCt4MhjNtuJaea9PNDwk1JtqKdoA7zqFEQgR7L8DAl00eJLgdtYJ");
const btn = document.querySelector('#checkout-button')
btn.addEventListtener('click', ()=>{
	fetch('/checkout.php',{
		method:"POST",
		headers:{
			'Contentt-Type' : 'application/json',
		},
		body: JSON.stringify({})
	}).then(res=> res.json())
	.then(payload => {
		stripe.redirectToCheckout({sessionId:payload.id})
	})
})