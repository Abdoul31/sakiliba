package rg.ad.elit.web;

import org.ad.elit.metier.IBankService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
public class BankController {
	@Autowired
		private IBankService BankServiceImpl;
		//L'ACCES AU METHODE INDEX VUE
	@RequestMapping("/operation")
	public String index() {
		return "comptes";
		
	}
}
