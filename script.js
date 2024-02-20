let accordions = document.getElementsByClassName("btnVerMais");

for (let i = 0; i < accordions.length; i++) {
	accordions[i].addEventListener("click", function () {
		this.classList.toggle("active");
		let content = this.nextElementSibling;
		if (content.style.display === "block") {
			content.style.display = "none";
		} else {
			content.style.display = "block";
			accordions[0].style.display = "none";
		}
	});
}
