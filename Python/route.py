class Route:
    """ Propierties """
    id      = int
    start   = []
    end     = []
    """ Constructor """
    def __init__(self, start, end):
        self.start = start
        self.end = end