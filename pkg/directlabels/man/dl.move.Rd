\name{dl.move}
\alias{dl.move}
\title{Manually move a direct label}
\description{Sometimes there is 1 label that is placed oddly by another
Positioning Function. This function can be used to manually place
that label in a good spot.}
\usage{
dl.move(groups, x, y)
}
\arguments{
  \item{groups}{
}
  \item{x}{
}
  \item{y}{
}
}
\details{
}
\value{A Positioning Function that moves a label into a good spot.}
\references{
}
\author{Toby Dylan Hocking <toby.hocking@inria.fr>}
\note{
}


\seealso{
}
\examples{library(directlabels)
data(mpg,package="ggplot2")
scatter <- xyplot(jitter(cty)~jitter(hwy),mpg,groups=class,aspect=1)
dlcompare(list(scatter),
          list("extreme.grid",
               `+dl.move`=list(extreme.grid,dl.move("suv",15,15))))}