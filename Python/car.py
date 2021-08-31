from account import Account

class Car:
    """ Propierties """
    id          = int
    license     = str
    driver      = Account("","")
    passenger   = int
    """ Constructor """
    def __init__(self, license, driver):
        self.license = license
        self.driver = driver