function populate (m1, m2) {

  var m1 = document.getElementById(m1);
  var m2 = document.getElementById(m2);
  m2.innerHTML = "";

  if (m1.value == "Bath Products") {
    var optionArray = ['bath-linens|Bath Linens', 'bathroom-accessories|Bathroom Accessories', 'bathroom-faucets|Bathroom Faucets', 'bathroom-sinks|Bathroom Sinks', 'bathroom-vanities|Bathroom Vanities', 'bathroom-vanity-lighting|Bathroom Vanity Lighting', 'bathtubs|Bathtubs', 'medicine-cabinets|Medicine Cabinets', 'showers|Showers', 'tile|Tile'];
  }

  else if (m1.value == "Bedroom Products") {
    var optionArray = ['bedroom-benches|Bedroom Benches', 'bedroom-decor|Bedroom Decor', 'beds-and-headboards|Beds and Headboards', 'chaise-lounge-chairs|Chaise Lounge Chairs', 'closet-storage|Closet Storage', 'dressers|Dressers', 'futons|Futons', 'lamps|Lamps', 'nightstands-and-bedside-tables|Nightstands and Bedside Tables'];
  }

  else if (m1.value == "Furniture") {
    var optionArray = ['bathroom-storage-and-vanities|Bathroom Storage and Vanities', 'bedroom-furniture|Bedroom Furniture', 'home-office-furniture|Home Office Furniture', 'kitchen-and-dining-furniture|Kitchen and Dining Furniture', 'living-room-furniture|Living Room Furniture', 'outdoor-furniture|Outdoor Furniture', 'storage-furniture|Storage Furniture'];
  }

  else if (m1.value == "Holiday Decor") {
    var optionArray = ['holiday-accents-and-figurines|Holiday Accents and Figurines', 'holiday-lighting|Holiday Lighting', 'wreaths-and-garlands|Wreaths and Garlands'];
  }

  else if (m1.value == "Home Decor") {
    var optionArray = ['artwork|Artwork', 'decorative-accents|Decorative Accents', 'mirrors|Mirrors', 'pillows-and-throws|Pillows and Throws', 'rugs|Rugs', 'wall-decor|Wall Decor', 'window-treatments|Window Treatments'];
  }

  else if (m1.value == "Home Improvement") {
    var optionArray = ['bathroom-fixtures|Bathroom Fixtures', 'building-materials|Building Materials', 'hardware|Hardware', 'heating-and-cooling|Heating and Cooling', 'kitchen-fixtures|Kitchen Fixtures', 'tile|Tile', 'tools-and-equipment|Tools and Equipment'];
  }

  else if (m1.value == "Housekeeping and Laundry") {
    var optionArray = ['ironing-boards|Ironing Boards', 'irons|Irons', 'laundry-hampers|Laundry Hampers'];
  }

  else if (m1.value == "Kitchen and Dining") {
    var optionArray = ['cabinet-and-drawer-hardware|Cabinet and Drawer Hardware', 'cookware-and-bakeware|Cookware and Bakeware', 'kitchen-and-cabinet-lighting|Kitchen and Cabinet Lighting', 'kitchen-and-dining-furniture|Kitchen and Dining Furniture', 'kitchen-appliances|Kitchen Appliances', 'kitchen-fixtures|Kitchen Fixtures', 'kitchen-storage-and-organization|Kitchen Storage and Organization', 'kitchen-tools-and-gadgets|Kitchen Tools and Gadgets', 'tabletop|Tabletop', 'tile|Tile'];
  }

  else if (m1.value == "Living Products") {
    var optionArray = ['armchairs-and-accent-chairs|Armchairs and Accent Chairs', 'artwork|Artwork', 'bookcases|Bookcases', 'coffee-and-accent-tables|Coffee and Accent Tables', 'fireplaces-and-accessories|Fireplaces and Accessories', 'home-decor|Home Decor', 'Lamps|Lamps', 'media-storage|Media Storage', 'rugs|Rugs', 'sofas-and-sectionals|Sofas and Sectionals'];
  }

  else if (m1.value == "Lighting") {
    var optionArray = ['bathroom-vanity-lighting|Bathroom Vanity Lighting', 'ceiling-fans|Ceiling Fans', 'chandeliers|Chandeliers', 'floor-lamps|Floor Lamps', 'flush-mount-ceiling-lighting|Flush-Mount Ceiling Lighting', 'kitchen-and-cabinet-lighting|Kitchen and Cabinet Lighting', 'outdoor-lighting|Outdoor Lighting', 'pendant-lighting|Pendant Lighting', 'table-lamps|Table Lamps', 'wall-sconces|Wall Sconces'];
  }

  else if (m1.value == "Outdoor Products") {
    var optionArray = ['lawn-and-garden|Lawn and Garden', 'outdoor-cooking|Outdoor Cooking', 'outdoor-decor|Outdoor Decor', 'outdoor-furniture|Outdoor Furniture', 'outdoor-lighting|Outdoor Lighting', 'outdoor-structures|Outdoor Structures', 'pool-and-spa|Pool and Spa'];
  }

  else if (m1.value == "Storage and Organization") {
    var optionArray = ['office-storage|Office Storage', 'media-storage|Media Storage', 'storage-furniture|Storage Furniture'];
  }

  for (var option in optionArray) {
    var pair = optionArray[option].split("|");
    var newOption = document.createElement("option");
    newOption.value = pair[1];
    newOption.innerHTML = pair[1];
    m2.options.add(newOption);
  }

}
