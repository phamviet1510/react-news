// import lib
import Loadable from 'react-loadable'

// import components
import LoadingComponent from '../../common/loader'

const routes = [
  {
    path: '/admin',
    exact: true,
    component: Loadable({
      loader: () => import('./pages/index'),
      loading: LoadingComponent,
    }),
  },
]

export default routes
