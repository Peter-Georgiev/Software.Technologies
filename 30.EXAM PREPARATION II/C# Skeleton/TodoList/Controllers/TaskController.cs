using System;
using System.Linq;
using System.Web.Mvc;
using TodoList.Models;

namespace TodoList.Controllers
{
        [ValidateInput(false)]
	public class TaskController : Controller
	{
        private TodoListDbContext db = new TodoListDbContext();

	    [HttpGet]
        [Route("")]
	    public ActionResult Index()
	    {
            //TODO: Implement me...
            var task = db.Tasks.ToList();
	        return View(task);
        }

        [HttpGet]
        [Route("create")]
        public ActionResult Create()
		{
            //TODO: Implement me...
            var task = new Task();
		    return View(task);
		}

		[HttpPost]
		[Route("create")]
        [ValidateAntiForgeryToken]
		public ActionResult Create(Task task)
		{
            //TODO: Implement me...
            if (this.ModelState.IsValid)
            {
                db.Tasks.Add(task);
                db.SaveChanges();
                return Redirect("/");
            }

            return View(task);
        }

		[HttpGet]
		[Route("delete/{id}")]
        public ActionResult Delete(int id)
		{
            //TODO: Implement me...
            var task = db.Tasks.Find(id);
		    return View(task);
        }

		[HttpPost]
		[Route("delete/{id}")]
        [ValidateAntiForgeryToken]
		public ActionResult DeleteConfirm(int id)
		{
            //TODO: Implement me...
            var taskFromDb = db.Tasks.Find(id);

            if (taskFromDb == null)
            {
                return HttpNotFound();
            }

            db.Tasks.Remove(taskFromDb);
            db.SaveChanges();

            return Redirect("/");
        }
	}
}