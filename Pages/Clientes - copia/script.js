using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Prueba2LTE.Models;
using System.Diagnostics;

namespace Prueba2LTE.Controllers {
  public class CampaignController: Controller {
    public IActionResult Index() {
      return View();
    }

    public IActionResult CreateCampaign() {
      return PartialView("CreateCampaign");
    }
  }
}