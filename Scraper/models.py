
class CategoryType:
    CLOTHING = "Clothing"
    BEAUTY = "Beauty"
    HOME = "Home"


class Category:
    def __init__(self, name, subcategories, category_type):
        self.name = name
        self.subcategories = subcategories
        self.category_type = category_type


class Subcategory:
    def __init__(self, name, url):
        self.name = name
        self.url = url
