package shoppinglist.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import shoppinglist.bindingModel.ProductBindingModel;
import shoppinglist.entity.Product;
import shoppinglist.repository.ProductRepository;

import java.util.List;

@Controller
public class ProductController {

	private final ProductRepository productRepository;

	@Autowired
	public ProductController(ProductRepository productRepository) {
		this.productRepository = productRepository;
	}

	@GetMapping("/")
	public String index(Model model) {
		//TODO: Implement me ...
		List<Product> products = this.productRepository.findAll();

		model.addAttribute("products", products);
		model.addAttribute("view", "product/index");
		return "base-layout";
	}

	@GetMapping("/create")
	public String create(Model model) {
		//TODO: Implement me ...
		model.addAttribute("product", new ProductBindingModel());
		model.addAttribute("view", "product/create");
		return "base-layout";
	}

	@PostMapping("/create")
	public String createProcess(Model model, ProductBindingModel productBindingModel) {
		//TODO: Implement me ...
		Product p = new Product();

		p.setPriority(productBindingModel.getPriority());
		p.setName(productBindingModel.getName());
		p.setQuantity(productBindingModel.getQuantity());
		p.setStatus(productBindingModel.getStatus());

		productRepository.saveAndFlush(p);

		return "redirect:/";
	}

	@GetMapping("/edit/{id}")
	public String edit(Model model, @PathVariable int id) {
		//TODO: Implement me ...
		Product product = this.productRepository.findOne(id);
		if (product == null) {
			return "redirect:/";
		}

		model.addAttribute("product", product);
		model.addAttribute("view", "product/edit");
		return "base-layout";
	}

	@PostMapping("/edit/{id}")
	public String editProcess(Model model, @PathVariable int id, ProductBindingModel productBindingModel) {
		//TODO: Implement me ...
		Product p = this.productRepository.findOne(id);

		p.setPriority(productBindingModel.getPriority());
		p.setName(productBindingModel.getName());
		p.setQuantity(productBindingModel.getQuantity());
		p.setStatus(productBindingModel.getStatus());

		productRepository.saveAndFlush(p);

		return "redirect:/";
	}
}
