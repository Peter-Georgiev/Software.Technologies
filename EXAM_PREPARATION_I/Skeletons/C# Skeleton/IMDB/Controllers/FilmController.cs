using System.Linq;
using System.Net;
using System.Web.Mvc;
using IMDB.Models;

namespace IMDB.Controllers
{
    [ValidateInput(false)]
    public class FilmController : Controller
    {

        private IMDBDbContext db = new IMDBDbContext();

        [HttpGet]
        [Route("")]
        public ActionResult Index()
        {
            //TODO: Implement me ...
            var films = db.Films.ToList();

            return View(films);
        }

        [HttpGet]
        [Route("create")]
        public ActionResult Create()
        {
            //TODO: Implement me ...
            return View(new Film());
        }

        [HttpPost]
        [Route("create")]
        [ValidateAntiForgeryToken]
        public ActionResult Create(Film film)
        {
            //TODO: Implement me ...
            if (ModelState.IsValid)
            {
                db.Films.Add(film);
                db.SaveChanges();
                return Redirect("/");
            }
            return View();
        }

        [HttpGet]
        [Route("edit/{id}")]
        public ActionResult Edit(int? id)
        {
            //TODO: Implement me ...
            var film = db.Films.Find(id);

            if (film != null)
            {
                return View(film);
            }

            return Redirect("/");
        }

        [HttpPost]
        [Route("edit/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult EditConfirm(int? id, Film filmModel)
        {
            //TODO: Implement me ...
            if (!ModelState.IsValid)
            {
                return View("Edit", filmModel);
            }

            var filmFromDb = db.Films.Find(id);
            if (filmFromDb != null)
            {
                filmFromDb.Name = filmModel.Name;
                filmFromDb.Director = filmModel.Director;
                filmFromDb.Genre = filmModel.Genre;
                filmFromDb.Year = filmModel.Year;

                db.SaveChanges();

                return Redirect("/");
            }

            return Redirect("/");
        }

        [HttpGet]
        [Route("delete/{id}")]
        public ActionResult Delete(int? id)
        {
            //TODO: Implement me ...
            var film = db.Films.Find(id);
            if (film != null)
            {
                return View(film);
            }

            return Redirect("/");
        }

        [HttpPost]
        [Route("delete/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirm(int? id, Film filmModel)
        {
            //TODO: Implement me ...
            var film = db.Films.Find(id);
            if (film != null)
            {
                db.Films.Remove(film);
                db.SaveChanges();
            }

            return Redirect("/");
        }
    }
}