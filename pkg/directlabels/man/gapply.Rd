\name{gapply}
\alias{gapply}
\title{gapply}
\description{apply a Positioning Method to every group. works like ddply from
plyr package, but the grouping column is always called groups, and
the Positioning Method is not necessarily a function (but can be).}
\usage{
gapply(d, method, ...)
}
\arguments{
  \item{d}{data frame with column groups.}
  \item{method}{Positioning Method to apply to every group separately.}
  \item{\dots}{additional arguments for FUN.}
}

\value{data frame of results after applying FUN to each group in d.}

\author{Toby Dylan Hocking <toby.hocking@inria.fr>}




