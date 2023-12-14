from models import Category, Subcategory


def get_categories():
    """
    Get a list of predefined categories.

    :return: a list of predefined categories with subcategories and their URLs
    """
    return [
        {"name": "DAMSKIE", "subcategories": [
            {"name": "Sukienki", "url": "https://www2.hm.com/pl_pl/ona/produkty/sukienki.html"},
            {"name": "Topy", "url": "https://www2.hm.com/pl_pl/ona/produkty/topy.html"},
        ]},
        {"name": "MĘSKIE", "subcategories": [
            {"name": "Koszule", "url": "https://www2.hm.com/pl_pl/on/produkty/koszule.html"},
            {"name": "Spodnie", "url": "https://www2.hm.com/pl_pl/on/produkty/spodnie.html"},
        ]},
        {"name": "H&M HOME", "subcategories": [
            {"name": "Pościele", "url": "https://www2.hm.com/pl_pl/dom/produkty/posciel.html"},
            {"name": "Dywany", "url": "https://www2.hm.com/pl_pl/dom/produkty/dywany.html"},
        ]},
        {"name": "BEAUTY", "subcategories": [
            {"name": "Makijaż", "url": "https://www2.hm.com/pl_pl/beauty/shop-by-product/makijaz.html"},
            {"name": "Paznokcie", "url": "https://www2.hm.com/pl_pl/beauty/shop-by-product/paznokcie.html"},
        ]},
    ]
