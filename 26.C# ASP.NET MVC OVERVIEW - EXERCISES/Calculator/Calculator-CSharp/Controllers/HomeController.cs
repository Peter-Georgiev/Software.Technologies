using System;
using System.Web.Mvc;

namespace Calculator_CSharp.Controllers
{
using Calculator_CSharp.Models;
    public class HomeController : Controller
    {
        public ActionResult Index(Calculator calculator)
        {
            return View(calculator);
        }

        [HttpPost]
        public ActionResult Calculate(Calculator calculator)
        {
            calculator.Result = CalculatorResult(calculator);

            return RedirectToAction("Index", calculator);
        }

        public decimal CalculatorResult(Calculator calculator)
        {
            decimal result = 0M;

            switch (calculator.Operator)
            {
                case "+":
                    result = calculator.LeftOperand + calculator.RightOperand;
                    break;
                case "-":
                    result = calculator.LeftOperand - calculator.RightOperand;
                    break;
                case "*":
                    result = calculator.LeftOperand * calculator.RightOperand;
                    break;
                case "/":
                    result = calculator.LeftOperand / calculator.RightOperand;
                    break;
            }

            return result;
        }
    }
}