using System.Linq;
using System.Web.Mvc;
using AnimeList.Models;

namespace AnimeList.Controllers
{
    [ValidateInput(false)]
    public class AnimeController : Controller
    {
        AnimeListDbContext db = new AnimeListDbContext();

        [HttpGet]
        [Route("")]
        public ActionResult Index()
        {
            //TODO: Implement me ...
            var animes = db.Animes.ToList();
            return View(animes);
        }

        [HttpGet]
        [Route("create")]
        public ActionResult Create()
        {
            //TODO: Implement me ...
            return View(new Anime());
        }

        [HttpPost]
        [Route("create")]
        [ValidateAntiForgeryToken]
        public ActionResult Create(Anime anime)
        {
            //TODO: Implement me ...
            if (this.ModelState.IsValid)
            {
                db.Animes.Add(anime);
                db.SaveChanges();
                return Redirect("/");
            }

            return View(anime);
        }

        [HttpGet]
        [Route("delete/{id}")]
        public ActionResult Delete(int? id)
        {
            //TODO: Implement me ...
            var anime = db.Animes.Find(id);
            if (anime == null)
            {
                return HttpNotFound();
            }

            return View(anime);
        }

        [HttpPost]
        [Route("delete/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirm(int? id, Anime animeModel)
        {
            //TODO: Implement me ...
            var anime = db.Animes.Find(id);
            if (anime == null)
            {
                return HttpNotFound();
            }

            db.Animes.Remove(anime);
            db.SaveChanges();

            return Redirect("/");
        }
    }
}